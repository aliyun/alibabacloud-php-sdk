<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectDetailResponseBody\data\source\clothes;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectDetailResponseBody\data\source\files;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\QueryProjectDetailResponseBody\data\source\policy;

class source extends Model
{
    /**
     * @var clothes[]
     */
    public $clothes;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var policy
     */
    public $policy;
    protected $_name = [
        'clothes' => 'Clothes',
        'createTime' => 'CreateTime',
        'deleted' => 'Deleted',
        'files' => 'Files',
        'id' => 'Id',
        'modifiedTime' => 'ModifiedTime',
        'ossKey' => 'OssKey',
        'policy' => 'Policy',
    ];

    public function validate()
    {
        if (\is_array($this->clothes)) {
            Model::validateArray($this->clothes);
        }
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        if (null !== $this->policy) {
            $this->policy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clothes) {
            if (\is_array($this->clothes)) {
                $res['Clothes'] = [];
                $n1 = 0;
                foreach ($this->clothes as $item1) {
                    $res['Clothes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['Files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['Files'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toArray($noStream) : $this->policy;
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
        if (isset($map['Clothes'])) {
            if (!empty($map['Clothes'])) {
                $model->clothes = [];
                $n1 = 0;
                foreach ($map['Clothes'] as $item1) {
                    $model->clothes[$n1] = clothes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['Files'] as $item1) {
                    $model->files[$n1] = files::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }

        return $model;
    }
}
