<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class SaveVirtualDatasourceDdlRequest extends Model
{
    /**
     * @var string
     */
    public $ddl;
    /**
     * @var string
     */
    public $vdbId;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'ddl'         => 'ddl',
        'vdbId'       => 'vdbId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ddl) {
            $res['ddl'] = $this->ddl;
        }

        if (null !== $this->vdbId) {
            $res['vdbId'] = $this->vdbId;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['ddl'])) {
            $model->ddl = $map['ddl'];
        }

        if (isset($map['vdbId'])) {
            $model->vdbId = $map['vdbId'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
