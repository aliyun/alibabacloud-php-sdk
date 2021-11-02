<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail\chart\data;
use AlibabaCloud\Tea\Model;

class chart extends Model
{
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
    public $type;

    /**
     * @var string
     */
    public $XLabel;

    /**
     * @var string
     */
    public $YLabel;
    protected $_name = [
        'data'   => 'Data',
        'label'  => 'Label',
        'type'   => 'Type',
        'XLabel' => 'XLabel',
        'YLabel' => 'YLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
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

        return $model;
    }
}
