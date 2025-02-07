<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody\version\containers;

class version extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var containers[]
     */
    public $containers;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $lastPublishTime;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $publishTime;
    /**
     * @var string
     */
    public $remarks;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'appId'           => 'AppId',
        'containers'      => 'Containers',
        'createTime'      => 'CreateTime',
        'lastPublishTime' => 'LastPublishTime',
        'name'            => 'Name',
        'publishTime'     => 'PublishTime',
        'remarks'         => 'Remarks',
        'status'          => 'Status',
        'updateTime'      => 'UpdateTime',
        'versionId'       => 'VersionId',
    ];

    public function validate()
    {
        if (\is_array($this->containers)) {
            Model::validateArray($this->containers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->containers) {
            if (\is_array($this->containers)) {
                $res['Containers'] = [];
                $n1                = 0;
                foreach ($this->containers as $item1) {
                    $res['Containers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->lastPublishTime) {
            $res['LastPublishTime'] = $this->lastPublishTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n1                = 0;
                foreach ($map['Containers'] as $item1) {
                    $model->containers[$n1++] = containers::fromMap($item1);
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['LastPublishTime'])) {
            $model->lastPublishTime = $map['LastPublishTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
