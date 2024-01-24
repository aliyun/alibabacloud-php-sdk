<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbSlsInfoResponseBody;

use AlibabaCloud\Tea\Model;

class auditInfo extends Model
{
    /**
     * @description The name of the LogStore.
     *
     * @example test
     *
     * @var string
     */
    public $logStore;

    /**
     * @description The name of the Log Service project.
     *
     * @example test
     *
     * @var string
     */
    public $project;
    protected $_name = [
        'logStore' => 'LogStore',
        'project'  => 'Project',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditInfo
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

        return $model;
    }
}
