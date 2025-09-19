<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeSuspEventUserSettingResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $levelsOn;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'levelsOn' => 'LevelsOn',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->levelsOn)) {
            Model::validateArray($this->levelsOn);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->levelsOn) {
            if (\is_array($this->levelsOn)) {
                $res['LevelsOn'] = [];
                $n1 = 0;
                foreach ($this->levelsOn as $item1) {
                    $res['LevelsOn'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LevelsOn'])) {
            if (!empty($map['LevelsOn'])) {
                $model->levelsOn = [];
                $n1 = 0;
                foreach ($map['LevelsOn'] as $item1) {
                    $model->levelsOn[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
