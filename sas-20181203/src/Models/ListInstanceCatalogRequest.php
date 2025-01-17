<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListInstanceCatalogRequest extends Model
{
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int[]
     */
    public $requirementIds;
    /**
     * @var int[]
     */
    public $standardIds;
    /**
     * @var string[]
     */
    public $types;
    protected $_name = [
        'lang'           => 'Lang',
        'regionId'       => 'RegionId',
        'requirementIds' => 'RequirementIds',
        'standardIds'    => 'StandardIds',
        'types'          => 'Types',
    ];

    public function validate()
    {
        if (\is_array($this->requirementIds)) {
            Model::validateArray($this->requirementIds);
        }
        if (\is_array($this->standardIds)) {
            Model::validateArray($this->standardIds);
        }
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requirementIds) {
            if (\is_array($this->requirementIds)) {
                $res['RequirementIds'] = [];
                $n1                    = 0;
                foreach ($this->requirementIds as $item1) {
                    $res['RequirementIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->standardIds) {
            if (\is_array($this->standardIds)) {
                $res['StandardIds'] = [];
                $n1                 = 0;
                foreach ($this->standardIds as $item1) {
                    $res['StandardIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['Types'] = [];
                $n1           = 0;
                foreach ($this->types as $item1) {
                    $res['Types'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequirementIds'])) {
            if (!empty($map['RequirementIds'])) {
                $model->requirementIds = [];
                $n1                    = 0;
                foreach ($map['RequirementIds'] as $item1) {
                    $model->requirementIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StandardIds'])) {
            if (!empty($map['StandardIds'])) {
                $model->standardIds = [];
                $n1                 = 0;
                foreach ($map['StandardIds'] as $item1) {
                    $model->standardIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = [];
                $n1           = 0;
                foreach ($map['Types'] as $item1) {
                    $model->types[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
