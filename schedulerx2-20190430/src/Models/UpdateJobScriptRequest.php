<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Dara\Model;

class UpdateJobScriptRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $namespaceSource;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scriptContent;

    /**
     * @var string
     */
    public $versionDescription;
    protected $_name = [
        'groupId' => 'GroupId',
        'jobId' => 'JobId',
        'namespace' => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'regionId' => 'RegionId',
        'scriptContent' => 'ScriptContent',
        'versionDescription' => 'VersionDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scriptContent) {
            $res['ScriptContent'] = $this->scriptContent;
        }

        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScriptContent'])) {
            $model->scriptContent = $map['ScriptContent'];
        }

        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }

        return $model;
    }
}
