<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportSingleConversationRequest\requestParams;

use AlibabaCloud\Tea\Model;

class conversation extends Model
{
    /**
     * @example $1$123:123
     *
     * @var string
     */
    public $appCid;

    /**
     * @var string[]
     */
    public $appUids;

    /**
     * @example 1613700223555
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $extensions;
    protected $_name = [
        'appCid'     => 'AppCid',
        'appUids'    => 'AppUids',
        'createTime' => 'CreateTime',
        'extensions' => 'Extensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->appUids) {
            $res['AppUids'] = $this->appUids;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conversation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['AppUids'])) {
            if (!empty($map['AppUids'])) {
                $model->appUids = $map['AppUids'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }

        return $model;
    }
}
