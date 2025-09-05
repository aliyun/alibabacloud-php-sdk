<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\GetFaceEntityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetFaceEntityResponseBody\data\faces;

class data extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var faces[]
     */
    public $faces;

    /**
     * @var string
     */
    public $labels;
    protected $_name = [
        'dbName' => 'DbName',
        'entityId' => 'EntityId',
        'faces' => 'Faces',
        'labels' => 'Labels',
    ];

    public function validate()
    {
        if (\is_array($this->faces)) {
            Model::validateArray($this->faces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->faces) {
            if (\is_array($this->faces)) {
                $res['Faces'] = [];
                $n1 = 0;
                foreach ($this->faces as $item1) {
                    $res['Faces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['Faces'])) {
            if (!empty($map['Faces'])) {
                $model->faces = [];
                $n1 = 0;
                foreach ($map['Faces'] as $item1) {
                    $model->faces[$n1] = faces::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        return $model;
    }
}
