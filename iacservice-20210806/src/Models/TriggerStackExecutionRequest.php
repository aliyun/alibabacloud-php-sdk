<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class TriggerStackExecutionRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string[]
     */
    public $changedFolders;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $codePackagePath;

    /**
     * @var string
     */
    public $codeVersionId;
    protected $_name = [
        'action' => 'action',
        'changedFolders' => 'changedFolders',
        'clientToken' => 'clientToken',
        'codePackagePath' => 'codePackagePath',
        'codeVersionId' => 'codeVersionId',
    ];

    public function validate()
    {
        if (\is_array($this->changedFolders)) {
            Model::validateArray($this->changedFolders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->changedFolders) {
            if (\is_array($this->changedFolders)) {
                $res['changedFolders'] = [];
                $n1 = 0;
                foreach ($this->changedFolders as $item1) {
                    $res['changedFolders'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->codePackagePath) {
            $res['codePackagePath'] = $this->codePackagePath;
        }

        if (null !== $this->codeVersionId) {
            $res['codeVersionId'] = $this->codeVersionId;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['changedFolders'])) {
            if (!empty($map['changedFolders'])) {
                $model->changedFolders = [];
                $n1 = 0;
                foreach ($map['changedFolders'] as $item1) {
                    $model->changedFolders[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['codePackagePath'])) {
            $model->codePackagePath = $map['codePackagePath'];
        }

        if (isset($map['codeVersionId'])) {
            $model->codeVersionId = $map['codeVersionId'];
        }

        return $model;
    }
}
