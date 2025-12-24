<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class RunNotifyComponentWithEmailRequest extends Model
{
    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string
     */
    public $assetId;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string[]
     */
    public $receivers;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var string
     */
    public $roleType;

    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'actionName' => 'ActionName',
        'assetId' => 'AssetId',
        'componentName' => 'ComponentName',
        'content' => 'Content',
        'lang' => 'Lang',
        'nodeName' => 'NodeName',
        'playbookUuid' => 'PlaybookUuid',
        'receivers' => 'Receivers',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
        'subject' => 'Subject',
    ];

    public function validate()
    {
        if (\is_array($this->receivers)) {
            Model::validateArray($this->receivers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }

        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }

        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->receivers) {
            if (\is_array($this->receivers)) {
                $res['Receivers'] = [];
                $n1 = 0;
                foreach ($this->receivers as $item1) {
                    $res['Receivers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
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
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }

        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }

        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['Receivers'])) {
            if (!empty($map['Receivers'])) {
                $model->receivers = [];
                $n1 = 0;
                foreach ($map['Receivers'] as $item1) {
                    $model->receivers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        return $model;
    }
}
