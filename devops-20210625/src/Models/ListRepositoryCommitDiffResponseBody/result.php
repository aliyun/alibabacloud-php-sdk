<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitDiffResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 100644
     *
     * @var string
     */
    public $aMode;

    /**
     * @example 100755
     *
     * @var string
     */
    public $bMode;

    /**
     * @var bool
     */
    public $deletedFile;

    /**
     * @example --- /dev/null\\n+++ b/src/test/java/com/aliyun/codeupdemo/CodeupDemoApplicationTests.java\\n@@ -0,0 +1,13 @@\\n+package com.aliyun.codeupdemo;\\n+\\n+import org.junit.jupiter.api.Test;\\n+import org.springframework.boot.test.context.SpringBootTest;\\n+\\n+@SpringBootTest\\n+class CodeupDemoApplicationTest {\\n+\\n+ @Test\\n+ void contextLoads() {\\n+ }\\n+\\n+}\\n
     *
     * @var string
     */
    public $diff;

    /**
     * @var bool
     */
    public $isBinary;

    /**
     * @var bool
     */
    public $isNewLfs;

    /**
     * @var bool
     */
    public $isOldLfs;

    /**
     * @var bool
     */
    public $newFile;

    /**
     * @example 6c268061a546378276559c713d0ad377d4xxxxxx
     *
     * @var string
     */
    public $newId;

    /**
     * @example src/test/java/com/aliyun/codeupdemo/CodeupDemoApplicationTests.java
     *
     * @var string
     */
    public $newPath;

    /**
     * @example 0000000000000000000000000000000000000000
     *
     * @var string
     */
    public $oldId;

    /**
     * @example src/test/java/com/aliyun/codeupdemo/CodeupDemoApplicationTests.java
     *
     * @var string
     */
    public $oldPath;

    /**
     * @var bool
     */
    public $renamedFile;
    protected $_name = [
        'aMode'       => 'aMode',
        'bMode'       => 'bMode',
        'deletedFile' => 'deletedFile',
        'diff'        => 'diff',
        'isBinary'    => 'isBinary',
        'isNewLfs'    => 'isNewLfs',
        'isOldLfs'    => 'isOldLfs',
        'newFile'     => 'newFile',
        'newId'       => 'newId',
        'newPath'     => 'newPath',
        'oldId'       => 'oldId',
        'oldPath'     => 'oldPath',
        'renamedFile' => 'renamedFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aMode) {
            $res['aMode'] = $this->aMode;
        }
        if (null !== $this->bMode) {
            $res['bMode'] = $this->bMode;
        }
        if (null !== $this->deletedFile) {
            $res['deletedFile'] = $this->deletedFile;
        }
        if (null !== $this->diff) {
            $res['diff'] = $this->diff;
        }
        if (null !== $this->isBinary) {
            $res['isBinary'] = $this->isBinary;
        }
        if (null !== $this->isNewLfs) {
            $res['isNewLfs'] = $this->isNewLfs;
        }
        if (null !== $this->isOldLfs) {
            $res['isOldLfs'] = $this->isOldLfs;
        }
        if (null !== $this->newFile) {
            $res['newFile'] = $this->newFile;
        }
        if (null !== $this->newId) {
            $res['newId'] = $this->newId;
        }
        if (null !== $this->newPath) {
            $res['newPath'] = $this->newPath;
        }
        if (null !== $this->oldId) {
            $res['oldId'] = $this->oldId;
        }
        if (null !== $this->oldPath) {
            $res['oldPath'] = $this->oldPath;
        }
        if (null !== $this->renamedFile) {
            $res['renamedFile'] = $this->renamedFile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aMode'])) {
            $model->aMode = $map['aMode'];
        }
        if (isset($map['bMode'])) {
            $model->bMode = $map['bMode'];
        }
        if (isset($map['deletedFile'])) {
            $model->deletedFile = $map['deletedFile'];
        }
        if (isset($map['diff'])) {
            $model->diff = $map['diff'];
        }
        if (isset($map['isBinary'])) {
            $model->isBinary = $map['isBinary'];
        }
        if (isset($map['isNewLfs'])) {
            $model->isNewLfs = $map['isNewLfs'];
        }
        if (isset($map['isOldLfs'])) {
            $model->isOldLfs = $map['isOldLfs'];
        }
        if (isset($map['newFile'])) {
            $model->newFile = $map['newFile'];
        }
        if (isset($map['newId'])) {
            $model->newId = $map['newId'];
        }
        if (isset($map['newPath'])) {
            $model->newPath = $map['newPath'];
        }
        if (isset($map['oldId'])) {
            $model->oldId = $map['oldId'];
        }
        if (isset($map['oldPath'])) {
            $model->oldPath = $map['oldPath'];
        }
        if (isset($map['renamedFile'])) {
            $model->renamedFile = $map['renamedFile'];
        }

        return $model;
    }
}
