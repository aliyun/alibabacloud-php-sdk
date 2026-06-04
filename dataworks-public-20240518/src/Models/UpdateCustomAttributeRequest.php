<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateCustomAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var bool
     */
    public $displayEnabled;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string[]
     */
    public $entityTypes;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $searchFilterEnabled;

    /**
     * @var string[]
     */
    public $valueEnums;
    protected $_name = [
        'comment' => 'Comment',
        'displayEnabled' => 'DisplayEnabled',
        'displayName' => 'DisplayName',
        'entityTypes' => 'EntityTypes',
        'id' => 'Id',
        'searchFilterEnabled' => 'SearchFilterEnabled',
        'valueEnums' => 'ValueEnums',
    ];

    public function validate()
    {
        if (\is_array($this->entityTypes)) {
            Model::validateArray($this->entityTypes);
        }
        if (\is_array($this->valueEnums)) {
            Model::validateArray($this->valueEnums);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->displayEnabled) {
            $res['DisplayEnabled'] = $this->displayEnabled;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->entityTypes) {
            if (\is_array($this->entityTypes)) {
                $res['EntityTypes'] = [];
                $n1 = 0;
                foreach ($this->entityTypes as $item1) {
                    $res['EntityTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->searchFilterEnabled) {
            $res['SearchFilterEnabled'] = $this->searchFilterEnabled;
        }

        if (null !== $this->valueEnums) {
            if (\is_array($this->valueEnums)) {
                $res['ValueEnums'] = [];
                $n1 = 0;
                foreach ($this->valueEnums as $item1) {
                    $res['ValueEnums'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['DisplayEnabled'])) {
            $model->displayEnabled = $map['DisplayEnabled'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EntityTypes'])) {
            if (!empty($map['EntityTypes'])) {
                $model->entityTypes = [];
                $n1 = 0;
                foreach ($map['EntityTypes'] as $item1) {
                    $model->entityTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['SearchFilterEnabled'])) {
            $model->searchFilterEnabled = $map['SearchFilterEnabled'];
        }

        if (isset($map['ValueEnums'])) {
            if (!empty($map['ValueEnums'])) {
                $model->valueEnums = [];
                $n1 = 0;
                foreach ($map['ValueEnums'] as $item1) {
                    $model->valueEnums[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
