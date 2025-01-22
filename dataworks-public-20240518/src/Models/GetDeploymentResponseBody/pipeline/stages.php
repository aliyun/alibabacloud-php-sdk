<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentResponseBody\pipeline;

use AlibabaCloud\Dara\Model;

class stages extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $description;
    /**
     * @var mixed[]
     */
    public $detail;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $step;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'code'        => 'Code',
        'description' => 'Description',
        'detail'      => 'Detail',
        'message'     => 'Message',
        'name'        => 'Name',
        'status'      => 'Status',
        'step'        => 'Step',
        'type'        => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->detail)) {
            Model::validateArray($this->detail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->detail) {
            if (\is_array($this->detail)) {
                $res['Detail'] = [];
                foreach ($this->detail as $key1 => $value1) {
                    $res['Detail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->step) {
            $res['Step'] = $this->step;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                foreach ($map['Detail'] as $key1 => $value1) {
                    $model->detail[$key1] = $value1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
