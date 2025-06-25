<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\SetUserProfilePathRulesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetUserProfilePathRulesRequest\userProfilePathRule\blackPath;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetUserProfilePathRulesRequest\userProfilePathRule\whitePaths;

class userProfilePathRule extends Model
{
    /**
     * @var blackPath
     */
    public $blackPath;

    /**
     * @var whitePaths[]
     */
    public $whitePaths;
    protected $_name = [
        'blackPath' => 'BlackPath',
        'whitePaths' => 'WhitePaths',
    ];

    public function validate()
    {
        if (null !== $this->blackPath) {
            $this->blackPath->validate();
        }
        if (\is_array($this->whitePaths)) {
            Model::validateArray($this->whitePaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackPath) {
            $res['BlackPath'] = null !== $this->blackPath ? $this->blackPath->toArray($noStream) : $this->blackPath;
        }

        if (null !== $this->whitePaths) {
            if (\is_array($this->whitePaths)) {
                $res['WhitePaths'] = [];
                $n1 = 0;
                foreach ($this->whitePaths as $item1) {
                    $res['WhitePaths'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['BlackPath'])) {
            $model->blackPath = blackPath::fromMap($map['BlackPath']);
        }

        if (isset($map['WhitePaths'])) {
            if (!empty($map['WhitePaths'])) {
                $model->whitePaths = [];
                $n1 = 0;
                foreach ($map['WhitePaths'] as $item1) {
                    $model->whitePaths[$n1] = whitePaths::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
