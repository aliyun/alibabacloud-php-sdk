<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RecallMessageRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example 28017165705
     *
     * @var string
     */
    public $appCid;

    /**
     * @example 950000010
     *
     * @var string
     */
    public $appUid;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @example 28017165705.center_daily
     *
     * @var string
     */
    public $msgId;

    /**
     * @example 0
     *
     * @var int
     */
    public $operatorType;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'appCid'       => 'AppCid',
        'appUid'       => 'AppUid',
        'extensions'   => 'Extensions',
        'msgId'        => 'MsgId',
        'operatorType' => 'OperatorType',
        'type'         => 'Type',
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
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
