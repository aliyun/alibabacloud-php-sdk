<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetNodeOutputResponseBody extends Model
{
    /**
     * @var string
     */
    public $algoName;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example MaxComputeTable
     *
     * @var string
     */
    public $locationType;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @example 601FD8B1-78EB-5220-844C-92AC2EDAF7E1
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Model
     *
     * @var string
     */
    public $type;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $value;
    protected $_name = [
        'algoName'     => 'AlgoName',
        'displayName'  => 'DisplayName',
        'locationType' => 'LocationType',
        'nodeName'     => 'NodeName',
        'requestId'    => 'RequestId',
        'type'         => 'Type',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algoName) {
            $res['AlgoName'] = $this->algoName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->locationType) {
            $res['LocationType'] = $this->locationType;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNodeOutputResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgoName'])) {
            $model->algoName = $map['AlgoName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['LocationType'])) {
            $model->locationType = $map['LocationType'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
