<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody\dataFlowSubTask\dataFlowSubTask;

use AlibabaCloud\Dara\Model;

class fileDetail extends Model
{
    /**
     * @var string
     */
    public $checksum;
    /**
     * @var int
     */
    public $modifyTime;
    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'checksum'   => 'Checksum',
        'modifyTime' => 'ModifyTime',
        'size'       => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
