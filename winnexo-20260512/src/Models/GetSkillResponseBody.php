<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSkillResponseBody\arguments;

class GetSkillResponseBody extends Model
{
    /**
     * @var arguments[]
     */
    public $arguments;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $detailLogic;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $executeMode;

    /**
     * @var bool
     */
    public $globalAccess;

    /**
     * @var bool
     */
    public $hasDraftChanges;

    /**
     * @var string
     */
    public $inputConfig;

    /**
     * @var mixed[][]
     */
    public $inputConfigFormatted;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $skillCode;

    /**
     * @var mixed[][]
     */
    public $skillFiles;

    /**
     * @var int
     */
    public $skillHubDefinitionId;

    /**
     * @var string
     */
    public $skillMdSummary;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updatedTime;

    /**
     * @var int
     */
    public $versionCount;

    /**
     * @var string
     */
    public $versionNumber;
    protected $_name = [
        'arguments' => 'arguments',
        'code' => 'code',
        'createdTime' => 'createdTime',
        'description' => 'description',
        'detailLogic' => 'detailLogic',
        'displayName' => 'displayName',
        'executeMode' => 'executeMode',
        'globalAccess' => 'globalAccess',
        'hasDraftChanges' => 'hasDraftChanges',
        'inputConfig' => 'inputConfig',
        'inputConfigFormatted' => 'inputConfigFormatted',
        'message' => 'message',
        'name' => 'name',
        'requestId' => 'requestId',
        'skillCode' => 'skillCode',
        'skillFiles' => 'skillFiles',
        'skillHubDefinitionId' => 'skillHubDefinitionId',
        'skillMdSummary' => 'skillMdSummary',
        'sourceType' => 'sourceType',
        'status' => 'status',
        'tags' => 'tags',
        'updatedTime' => 'updatedTime',
        'versionCount' => 'versionCount',
        'versionNumber' => 'versionNumber',
    ];

    public function validate()
    {
        if (\is_array($this->arguments)) {
            Model::validateArray($this->arguments);
        }
        if (\is_array($this->inputConfigFormatted)) {
            Model::validateArray($this->inputConfigFormatted);
        }
        if (\is_array($this->skillFiles)) {
            Model::validateArray($this->skillFiles);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arguments) {
            if (\is_array($this->arguments)) {
                $res['arguments'] = [];
                $n1 = 0;
                foreach ($this->arguments as $item1) {
                    $res['arguments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->detailLogic) {
            $res['detailLogic'] = $this->detailLogic;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->executeMode) {
            $res['executeMode'] = $this->executeMode;
        }

        if (null !== $this->globalAccess) {
            $res['globalAccess'] = $this->globalAccess;
        }

        if (null !== $this->hasDraftChanges) {
            $res['hasDraftChanges'] = $this->hasDraftChanges;
        }

        if (null !== $this->inputConfig) {
            $res['inputConfig'] = $this->inputConfig;
        }

        if (null !== $this->inputConfigFormatted) {
            if (\is_array($this->inputConfigFormatted)) {
                $res['inputConfigFormatted'] = [];
                $n1 = 0;
                foreach ($this->inputConfigFormatted as $item1) {
                    if (\is_array($item1)) {
                        $res['inputConfigFormatted'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['inputConfigFormatted'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->skillCode) {
            $res['skillCode'] = $this->skillCode;
        }

        if (null !== $this->skillFiles) {
            if (\is_array($this->skillFiles)) {
                $res['skillFiles'] = [];
                $n1 = 0;
                foreach ($this->skillFiles as $item1) {
                    if (\is_array($item1)) {
                        $res['skillFiles'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['skillFiles'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillHubDefinitionId) {
            $res['skillHubDefinitionId'] = $this->skillHubDefinitionId;
        }

        if (null !== $this->skillMdSummary) {
            $res['skillMdSummary'] = $this->skillMdSummary;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updatedTime) {
            $res['updatedTime'] = $this->updatedTime;
        }

        if (null !== $this->versionCount) {
            $res['versionCount'] = $this->versionCount;
        }

        if (null !== $this->versionNumber) {
            $res['versionNumber'] = $this->versionNumber;
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
        if (isset($map['arguments'])) {
            if (!empty($map['arguments'])) {
                $model->arguments = [];
                $n1 = 0;
                foreach ($map['arguments'] as $item1) {
                    $model->arguments[$n1] = arguments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['detailLogic'])) {
            $model->detailLogic = $map['detailLogic'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['executeMode'])) {
            $model->executeMode = $map['executeMode'];
        }

        if (isset($map['globalAccess'])) {
            $model->globalAccess = $map['globalAccess'];
        }

        if (isset($map['hasDraftChanges'])) {
            $model->hasDraftChanges = $map['hasDraftChanges'];
        }

        if (isset($map['inputConfig'])) {
            $model->inputConfig = $map['inputConfig'];
        }

        if (isset($map['inputConfigFormatted'])) {
            if (!empty($map['inputConfigFormatted'])) {
                $model->inputConfigFormatted = [];
                $n1 = 0;
                foreach ($map['inputConfigFormatted'] as $item1) {
                    if (!empty($item1)) {
                        $model->inputConfigFormatted[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->inputConfigFormatted[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['skillCode'])) {
            $model->skillCode = $map['skillCode'];
        }

        if (isset($map['skillFiles'])) {
            if (!empty($map['skillFiles'])) {
                $model->skillFiles = [];
                $n1 = 0;
                foreach ($map['skillFiles'] as $item1) {
                    if (!empty($item1)) {
                        $model->skillFiles[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->skillFiles[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['skillHubDefinitionId'])) {
            $model->skillHubDefinitionId = $map['skillHubDefinitionId'];
        }

        if (isset($map['skillMdSummary'])) {
            $model->skillMdSummary = $map['skillMdSummary'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['updatedTime'])) {
            $model->updatedTime = $map['updatedTime'];
        }

        if (isset($map['versionCount'])) {
            $model->versionCount = $map['versionCount'];
        }

        if (isset($map['versionNumber'])) {
            $model->versionNumber = $map['versionNumber'];
        }

        return $model;
    }
}
