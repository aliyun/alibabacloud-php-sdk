<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class GetPermissionRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $callerType;

    /**
     * @var string
     */
    public $callerUid;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var mixed[]
     */
    public $labels;

    /**
     * @var string
     */
    public $option;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'callerType' => 'CallerType',
        'callerUid' => 'CallerUid',
        'creator' => 'Creator',
        'labels' => 'Labels',
        'option' => 'Option',
        'resource' => 'Resource',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->callerType) {
            $res['CallerType'] = $this->callerType;
        }

        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['Labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->option) {
            $res['Option'] = $this->option;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['CallerType'])) {
            $model->callerType = $map['CallerType'];
        }

        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                foreach ($map['Labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['Option'])) {
            $model->option = $map['Option'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
