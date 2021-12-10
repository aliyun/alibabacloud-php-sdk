<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20160607\Models;

use AlibabaCloud\Tea\Model;

class GetNamespaceListRequest extends Model
{
    /**
     * @var string
     */
    public $authorize;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'authorize' => 'Authorize',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorize) {
            $res['Authorize'] = $this->authorize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Authorize'])) {
            $model->authorize = $map['Authorize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
