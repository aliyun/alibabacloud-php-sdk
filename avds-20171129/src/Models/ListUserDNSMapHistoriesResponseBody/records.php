<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\ListUserDNSMapHistoriesResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $subdomain;

    /**
     * @var string
     */
    public $record;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'index'     => 'Index',
        'type'      => 'Type',
        'domain'    => 'Domain',
        'createdAt' => 'CreatedAt',
        'subdomain' => 'Subdomain',
        'record'    => 'Record',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->subdomain) {
            $res['Subdomain'] = $this->subdomain;
        }
        if (null !== $this->record) {
            $res['Record'] = $this->record;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Subdomain'])) {
            $model->subdomain = $map['Subdomain'];
        }
        if (isset($map['Record'])) {
            $model->record = $map['Record'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
