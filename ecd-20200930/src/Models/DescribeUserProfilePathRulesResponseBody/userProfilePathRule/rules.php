<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesResponseBody\userProfilePathRule;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesResponseBody\userProfilePathRule\rules\blackPath;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesResponseBody\userProfilePathRule\rules\whitePaths;
use AlibabaCloud\Tea\Model;

class rules extends Model
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
        'blackPath'  => 'BlackPath',
        'whitePaths' => 'WhitePaths',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackPath) {
            $res['BlackPath'] = null !== $this->blackPath ? $this->blackPath->toMap() : null;
        }
        if (null !== $this->whitePaths) {
            $res['WhitePaths'] = [];
            if (null !== $this->whitePaths && \is_array($this->whitePaths)) {
                $n = 0;
                foreach ($this->whitePaths as $item) {
                    $res['WhitePaths'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackPath'])) {
            $model->blackPath = blackPath::fromMap($map['BlackPath']);
        }
        if (isset($map['WhitePaths'])) {
            if (!empty($map['WhitePaths'])) {
                $model->whitePaths = [];
                $n                 = 0;
                foreach ($map['WhitePaths'] as $item) {
                    $model->whitePaths[$n++] = null !== $item ? whitePaths::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
