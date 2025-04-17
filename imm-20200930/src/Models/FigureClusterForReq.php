<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\FigureClusterForReq\cover;

class FigureClusterForReq extends Model
{
    /**
     * @var cover
     */
    public $cover;

    /**
     * @var string
     */
    public $customId;

    /**
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @var int
     */
    public $metaLockVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectId;
    protected $_name = [
        'cover' => 'Cover',
        'customId' => 'CustomId',
        'customLabels' => 'CustomLabels',
        'metaLockVersion' => 'MetaLockVersion',
        'name' => 'Name',
        'objectId' => 'ObjectId',
    ];

    public function validate()
    {
        if (null !== $this->cover) {
            $this->cover->validate();
        }
        if (\is_array($this->customLabels)) {
            Model::validateArray($this->customLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toArray($noStream) : $this->cover;
        }

        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }

        if (null !== $this->customLabels) {
            if (\is_array($this->customLabels)) {
                $res['CustomLabels'] = [];
                foreach ($this->customLabels as $key1 => $value1) {
                    $res['CustomLabels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->metaLockVersion) {
            $res['MetaLockVersion'] = $this->metaLockVersion;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
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
        if (isset($map['Cover'])) {
            $model->cover = cover::fromMap($map['Cover']);
        }

        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }

        if (isset($map['CustomLabels'])) {
            if (!empty($map['CustomLabels'])) {
                $model->customLabels = [];
                foreach ($map['CustomLabels'] as $key1 => $value1) {
                    $model->customLabels[$key1] = $value1;
                }
            }
        }

        if (isset($map['MetaLockVersion'])) {
            $model->metaLockVersion = $map['MetaLockVersion'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        return $model;
    }
}
