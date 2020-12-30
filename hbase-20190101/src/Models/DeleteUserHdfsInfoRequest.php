<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserHdfsInfoRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $nameService;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'nameService' => 'NameService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->nameService) {
            $res['NameService'] = $this->nameService;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserHdfsInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['NameService'])) {
            $model->nameService = $map['NameService'];
        }

        return $model;
    }
}
