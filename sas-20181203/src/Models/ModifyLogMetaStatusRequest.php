<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyLogMetaStatusRequest extends Model
{
    /**
     * @description The ID of the request source. Set the value to **sas**.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The name of the dedicated Logstore in which logs are stored.
     *
     * This parameter is required.
     * @example aegis-log-login
     *
     * @var string
     */
    public $logStore;

    /**
     * @description The name of the project.
     *
     * >  You can call the [DescribeLogMeta](~~DescribeLogMeta~~) operation to query the names of projects.
     * @example aegis-log
     *
     * @var string
     */
    public $project;

    /**
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @description The status of the log analysis feature. Valid values:
     *
     *   **enabled**
     *   **disabled**
     *
     * This parameter is required.
     * @example disabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'from'                       => 'From',
        'logStore'                   => 'LogStore',
        'project'                    => 'Project',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'status'                     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLogMetaStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
