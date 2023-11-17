<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\dummyProjectInfo\source;

use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\dummyProjectInfo\source\clothes\skuProps;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\dummyProjectInfo\source\clothes\skus;
use AlibabaCloud\Tea\Model;

class clothes extends Model
{
    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $part;

    /**
     * @var string
     */
    public $size;

    /**
     * @var skuProps[]
     */
    public $skuProps;

    /**
     * @var skus[]
     */
    public $skus;

    /**
     * @var string[]
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'coverUrl'     => 'CoverUrl',
        'createTime'   => 'CreateTime',
        'deleted'      => 'Deleted',
        'id'           => 'Id',
        'modifiedTime' => 'ModifiedTime',
        'name'         => 'Name',
        'ossKey'       => 'OssKey',
        'part'         => 'Part',
        'size'         => 'Size',
        'skuProps'     => 'SkuProps',
        'skus'         => 'Skus',
        'status'       => 'Status',
        'type'         => 'Type',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->part) {
            $res['Part'] = $this->part;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->skuProps) {
            $res['SkuProps'] = [];
            if (null !== $this->skuProps && \is_array($this->skuProps)) {
                $n = 0;
                foreach ($this->skuProps as $item) {
                    $res['SkuProps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->skus) {
            $res['Skus'] = [];
            if (null !== $this->skus && \is_array($this->skus)) {
                $n = 0;
                foreach ($this->skus as $item) {
                    $res['Skus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clothes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['Part'])) {
            $model->part = $map['Part'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SkuProps'])) {
            if (!empty($map['SkuProps'])) {
                $model->skuProps = [];
                $n               = 0;
                foreach ($map['SkuProps'] as $item) {
                    $model->skuProps[$n++] = null !== $item ? skuProps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Skus'])) {
            if (!empty($map['Skus'])) {
                $model->skus = [];
                $n           = 0;
                foreach ($map['Skus'] as $item) {
                    $model->skus[$n++] = null !== $item ? skus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
