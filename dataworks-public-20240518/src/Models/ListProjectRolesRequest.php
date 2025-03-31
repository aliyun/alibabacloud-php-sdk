<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListProjectRolesRequest extends Model
{
    /**
     * @var string[]
     */
    public $codes;

    /**
     * @var string[]
     */
    public $names;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'codes' => 'Codes',
        'names' => 'Names',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->codes)) {
            Model::validateArray($this->codes);
        }
        if (\is_array($this->names)) {
            Model::validateArray($this->names);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codes) {
            if (\is_array($this->codes)) {
                $res['Codes'] = [];
                $n1 = 0;
                foreach ($this->codes as $item1) {
                    $res['Codes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->names) {
            if (\is_array($this->names)) {
                $res['Names'] = [];
                $n1 = 0;
                foreach ($this->names as $item1) {
                    $res['Names'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Codes'])) {
            if (!empty($map['Codes'])) {
                $model->codes = [];
                $n1 = 0;
                foreach ($map['Codes'] as $item1) {
                    $model->codes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Names'])) {
            if (!empty($map['Names'])) {
                $model->names = [];
                $n1 = 0;
                foreach ($map['Names'] as $item1) {
                    $model->names[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
