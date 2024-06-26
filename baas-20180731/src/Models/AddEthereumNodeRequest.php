<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class AddEthereumNodeRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $ethereumId;

    /**
     * @var bool
     */
    public $externalNode;

    /**
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'description'  => 'Description',
        'ethereumId'   => 'EthereumId',
        'externalNode' => 'ExternalNode',
        'nodeName'     => 'NodeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ethereumId) {
            $res['EthereumId'] = $this->ethereumId;
        }
        if (null !== $this->externalNode) {
            $res['ExternalNode'] = $this->externalNode;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEthereumNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EthereumId'])) {
            $model->ethereumId = $map['EthereumId'];
        }
        if (isset($map['ExternalNode'])) {
            $model->externalNode = $map['ExternalNode'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
