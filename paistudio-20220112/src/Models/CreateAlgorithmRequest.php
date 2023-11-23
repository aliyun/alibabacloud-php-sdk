<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateAlgorithmRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmDescription;

    /**
     * @var string
     */
    public $algorithmName;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'algorithmDescription' => 'AlgorithmDescription',
        'algorithmName'        => 'AlgorithmName',
        'displayName'          => 'DisplayName',
        'workspaceId'          => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmDescription) {
            $res['AlgorithmDescription'] = $this->algorithmDescription;
        }
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlgorithmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmDescription'])) {
            $model->algorithmDescription = $map['AlgorithmDescription'];
        }
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
