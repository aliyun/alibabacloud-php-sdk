<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config;

use AlibabaCloud\Dara\Model;

class observability extends Model
{
    /**
     * @var string
     */
    public $auditLogstore;

    /**
     * @var string
     */
    public $eventsLogstore;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'auditLogstore' => 'auditLogstore',
        'eventsLogstore' => 'eventsLogstore',
        'project' => 'project',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditLogstore) {
            $res['auditLogstore'] = $this->auditLogstore;
        }

        if (null !== $this->eventsLogstore) {
            $res['eventsLogstore'] = $this->eventsLogstore;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
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
        if (isset($map['auditLogstore'])) {
            $model->auditLogstore = $map['auditLogstore'];
        }

        if (isset($map['eventsLogstore'])) {
            $model->eventsLogstore = $map['eventsLogstore'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        return $model;
    }
}
