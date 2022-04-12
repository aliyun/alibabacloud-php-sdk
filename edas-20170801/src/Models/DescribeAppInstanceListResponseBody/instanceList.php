<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\DescribeAppInstanceListResponseBody;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $canary;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $nodeLabels;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $podRaw;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appId'      => 'AppId',
        'canary'     => 'Canary',
        'groupId'    => 'GroupId',
        'groupName'  => 'GroupName',
        'nodeLabels' => 'NodeLabels',
        'nodeName'   => 'NodeName',
        'podRaw'     => 'PodRaw',
        'version'    => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->canary) {
            $res['Canary'] = $this->canary;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->nodeLabels) {
            $res['NodeLabels'] = $this->nodeLabels;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->podRaw) {
            $res['PodRaw'] = $this->podRaw;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Canary'])) {
            $model->canary = $map['Canary'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['NodeLabels'])) {
            $model->nodeLabels = $map['NodeLabels'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['PodRaw'])) {
            $model->podRaw = $map['PodRaw'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
