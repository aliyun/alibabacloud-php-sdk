<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\SetUserProfilePathRulesRequest;

use AlibabaCloud\SDK\Ecd\V20200930\Models\SetUserProfilePathRulesRequest\userProfilePathRule\blackPath;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetUserProfilePathRulesRequest\userProfilePathRule\whitePaths;
use AlibabaCloud\Tea\Model;

class userProfilePathRule extends Model
{
    /**
     * @description The directory in the blacklist.
     *
     * @var blackPath
     */
    public $blackPath;

    /**
     * @description The directories that you want to configure in the whitelist.
     *
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
     * @return userProfilePathRule
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
