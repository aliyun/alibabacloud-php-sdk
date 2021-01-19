<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20160607\Models;

use AlibabaCloud\Tea\Model;

class GetNamespaceListRequest extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $authorize;
    protected $_name = [
        'status'    => 'Status',
        'authorize' => 'Authorize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->authorize) {
            $res['Authorize'] = $this->authorize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNamespaceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Authorize'])) {
            $model->authorize = $map['Authorize'];
        }

        return $model;
    }
}
