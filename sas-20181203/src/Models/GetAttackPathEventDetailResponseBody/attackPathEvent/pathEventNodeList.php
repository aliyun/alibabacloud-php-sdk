<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAttackPathEventDetailResponseBody\attackPathEvent;

use AlibabaCloud\Dara\Model;

class pathEventNodeList extends Model
{
    /**
     * @var string
     */
    public $elementType;

    /**
     * @var string
     */
    public $nodeDetail;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $nodeUuid;

    /**
     * @var int
     */
    public $sensitiveAssetFlag;
    protected $_name = [
        'elementType' => 'ElementType',
        'nodeDetail' => 'NodeDetail',
        'nodeName' => 'NodeName',
        'nodeType' => 'NodeType',
        'nodeUuid' => 'NodeUuid',
        'sensitiveAssetFlag' => 'SensitiveAssetFlag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elementType) {
            $res['ElementType'] = $this->elementType;
        }

        if (null !== $this->nodeDetail) {
            $res['NodeDetail'] = $this->nodeDetail;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->nodeUuid) {
            $res['NodeUuid'] = $this->nodeUuid;
        }

        if (null !== $this->sensitiveAssetFlag) {
            $res['SensitiveAssetFlag'] = $this->sensitiveAssetFlag;
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
        if (isset($map['ElementType'])) {
            $model->elementType = $map['ElementType'];
        }

        if (isset($map['NodeDetail'])) {
            $model->nodeDetail = $map['NodeDetail'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['NodeUuid'])) {
            $model->nodeUuid = $map['NodeUuid'];
        }

        if (isset($map['SensitiveAssetFlag'])) {
            $model->sensitiveAssetFlag = $map['SensitiveAssetFlag'];
        }

        return $model;
    }
}
