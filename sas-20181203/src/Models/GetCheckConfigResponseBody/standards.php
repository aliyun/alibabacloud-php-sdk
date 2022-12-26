<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckConfigResponseBody;

use AlibabaCloud\Tea\Model;

class standards extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $showName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'id'       => 'Id',
        'showName' => 'ShowName',
        'status'   => 'Status',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return standards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
