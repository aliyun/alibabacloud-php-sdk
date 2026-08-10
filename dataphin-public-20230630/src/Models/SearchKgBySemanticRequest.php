<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SearchKgBySemanticRequest\searchCommand;

class SearchKgBySemanticRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var searchCommand
     */
    public $searchCommand;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'searchCommand' => 'SearchCommand',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->searchCommand) {
            $this->searchCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->searchCommand) {
            $res['SearchCommand'] = null !== $this->searchCommand ? $this->searchCommand->toArray($noStream) : $this->searchCommand;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['SearchCommand'])) {
            $model->searchCommand = searchCommand::fromMap($map['SearchCommand']);
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
