<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ImportDataSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The reason why the data sources failed to be imported. If the data sources were imported, this parameter is left empty.
     *
     * @example Data source DEV XXX already exists
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the data sources were imported. Valid values:
     *
     *   true: All the data sources were imported.
     *   false: Some of the data sources failed to be imported. You can troubleshoot issues based on the Message parameter.
     *
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'message' => 'Message',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
