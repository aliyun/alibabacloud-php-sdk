<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail\chart\data;

class chart extends Model
{
    /**
     * @var int
     */
    public $chatType;
    /**
     * @var data
     */
    public $data;
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $XLabel;
    /**
     * @var string
     */
    public $YLabel;
    /**
     * @var string
     */
    public $ZLabel;
    protected $_name = [
        'chatType' => 'ChatType',
        'data'     => 'Data',
        'label'    => 'Label',
        'name'     => 'Name',
        'type'     => 'Type',
        'XLabel'   => 'XLabel',
        'YLabel'   => 'YLabel',
        'ZLabel'   => 'ZLabel',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatType) {
            $res['ChatType'] = $this->chatType;
        }

        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->XLabel) {
            $res['XLabel'] = $this->XLabel;
        }

        if (null !== $this->YLabel) {
            $res['YLabel'] = $this->YLabel;
        }

        if (null !== $this->ZLabel) {
            $res['ZLabel'] = $this->ZLabel;
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
        if (isset($map['ChatType'])) {
            $model->chatType = $map['ChatType'];
        }

        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['XLabel'])) {
            $model->XLabel = $map['XLabel'];
        }

        if (isset($map['YLabel'])) {
            $model->YLabel = $map['YLabel'];
        }

        if (isset($map['ZLabel'])) {
            $model->ZLabel = $map['ZLabel'];
        }

        return $model;
    }
}
