<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskExecutionDetailResponseBody;

use AlibabaCloud\Dara\Model;

class metadata extends Model
{
    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var mixed[]
     */
    public $usage;
    protected $_name = [
        'sessionId' => 'sessionId',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->usage)) {
            Model::validateArray($this->usage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->usage) {
            if (\is_array($this->usage)) {
                $res['usage'] = [];
                foreach ($this->usage as $key1 => $value1) {
                    $res['usage'][$key1] = $value1;
                }
            }
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
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['usage'])) {
            if (!empty($map['usage'])) {
                $model->usage = [];
                foreach ($map['usage'] as $key1 => $value1) {
                    $model->usage[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
