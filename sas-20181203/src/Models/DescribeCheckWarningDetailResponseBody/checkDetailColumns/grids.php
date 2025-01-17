<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningDetailResponseBody\checkDetailColumns;

use AlibabaCloud\Dara\Model;

class grids extends Model
{
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $showName;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'key'      => 'Key',
        'showName' => 'ShowName',
        'type'     => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
