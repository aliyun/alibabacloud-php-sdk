<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunNodeResponseBody;

use AlibabaCloud\Tea\Model;

class metadata extends Model
{
    /**
     * @example flow-ebppc********5lwea
     *
     * @var string
     */
    public $displayName;

    /**
     * @example composite-pipeline
     *
     * @var string
     */
    public $identifier;

    /**
     * @example flow-ebppc********5lwea
     *
     * @var string
     */
    public $name;

    /**
     * @example node-wcs9z********27ps3
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example Dag
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example 15577********904
     *
     * @var string
     */
    public $provider;

    /**
     * @var string[]
     */
    public $relatedNodeIds;

    /**
     * @example v1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'displayName'    => 'DisplayName',
        'identifier'     => 'Identifier',
        'name'           => 'Name',
        'nodeId'         => 'NodeId',
        'nodeType'       => 'NodeType',
        'provider'       => 'Provider',
        'relatedNodeIds' => 'RelatedNodeIds',
        'version'        => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->relatedNodeIds) {
            $res['RelatedNodeIds'] = $this->relatedNodeIds;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['RelatedNodeIds'])) {
            if (!empty($map['RelatedNodeIds'])) {
                $model->relatedNodeIds = $map['RelatedNodeIds'];
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
