<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetLogMetaResponseBody;

use AlibabaCloud\Tea\Model;

class logMeta extends Model
{
    /**
     * @example aegis-log-login
     *
     * @var string
     */
    public $logStore;

    /**
     * @example sas-log
     *
     * @var string
     */
    public $project;

    /**
     * @example enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'logStore' => 'LogStore',
        'project'  => 'Project',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
