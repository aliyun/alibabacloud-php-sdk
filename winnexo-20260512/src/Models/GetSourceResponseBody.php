<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSourceResponseBody\objectBindings;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSourceResponseBody\unstructuredDocs;

class GetSourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $completionTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $hasNotes;

    /**
     * @var bool
     */
    public $hasSettings;

    /**
     * @var bool
     */
    public $hasStructuredTables;

    /**
     * @var bool
     */
    public $hasUnstructuredDocs;

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
    public $notes;

    /**
     * @var objectBindings[]
     */
    public $objectBindings;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var mixed[]
     */
    public $settings;

    /**
     * @var string
     */
    public $skillOutputId;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceKind;

    /**
     * @var string
     */
    public $sourceTags;

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
    public $structuredTables;

    /**
     * @var unstructuredDocs[]
     */
    public $unstructuredDocs;
    protected $_name = [
        'code' => 'code',
        'completionTime' => 'completionTime',
        'description' => 'description',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'hasNotes' => 'hasNotes',
        'hasSettings' => 'hasSettings',
        'hasStructuredTables' => 'hasStructuredTables',
        'hasUnstructuredDocs' => 'hasUnstructuredDocs',
        'message' => 'message',
        'name' => 'name',
        'notes' => 'notes',
        'objectBindings' => 'objectBindings',
        'objectId' => 'objectId',
        'objectType' => 'objectType',
        'operatingObjectName' => 'operatingObjectName',
        'requestId' => 'requestId',
        'scope' => 'scope',
        'settings' => 'settings',
        'skillOutputId' => 'skillOutputId',
        'sourceId' => 'sourceId',
        'sourceKind' => 'sourceKind',
        'sourceTags' => 'sourceTags',
        'sourceType' => 'sourceType',
        'status' => 'status',
        'structuredTables' => 'structuredTables',
        'unstructuredDocs' => 'unstructuredDocs',
    ];

    public function validate()
    {
        if (\is_array($this->objectBindings)) {
            Model::validateArray($this->objectBindings);
        }
        if (\is_array($this->settings)) {
            Model::validateArray($this->settings);
        }
        if (\is_array($this->structuredTables)) {
            Model::validateArray($this->structuredTables);
        }
        if (\is_array($this->unstructuredDocs)) {
            Model::validateArray($this->unstructuredDocs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->completionTime) {
            $res['completionTime'] = $this->completionTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->hasNotes) {
            $res['hasNotes'] = $this->hasNotes;
        }

        if (null !== $this->hasSettings) {
            $res['hasSettings'] = $this->hasSettings;
        }

        if (null !== $this->hasStructuredTables) {
            $res['hasStructuredTables'] = $this->hasStructuredTables;
        }

        if (null !== $this->hasUnstructuredDocs) {
            $res['hasUnstructuredDocs'] = $this->hasUnstructuredDocs;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->notes) {
            $res['notes'] = $this->notes;
        }

        if (null !== $this->objectBindings) {
            if (\is_array($this->objectBindings)) {
                $res['objectBindings'] = [];
                $n1 = 0;
                foreach ($this->objectBindings as $item1) {
                    $res['objectBindings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->objectId) {
            $res['objectId'] = $this->objectId;
        }

        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->settings) {
            if (\is_array($this->settings)) {
                $res['settings'] = [];
                foreach ($this->settings as $key1 => $value1) {
                    $res['settings'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->skillOutputId) {
            $res['skillOutputId'] = $this->skillOutputId;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceKind) {
            $res['sourceKind'] = $this->sourceKind;
        }

        if (null !== $this->sourceTags) {
            $res['sourceTags'] = $this->sourceTags;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->structuredTables) {
            if (\is_array($this->structuredTables)) {
                $res['structuredTables'] = [];
                $n1 = 0;
                foreach ($this->structuredTables as $item1) {
                    $res['structuredTables'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->unstructuredDocs) {
            if (\is_array($this->unstructuredDocs)) {
                $res['unstructuredDocs'] = [];
                $n1 = 0;
                foreach ($this->unstructuredDocs as $item1) {
                    $res['unstructuredDocs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['completionTime'])) {
            $model->completionTime = $map['completionTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['hasNotes'])) {
            $model->hasNotes = $map['hasNotes'];
        }

        if (isset($map['hasSettings'])) {
            $model->hasSettings = $map['hasSettings'];
        }

        if (isset($map['hasStructuredTables'])) {
            $model->hasStructuredTables = $map['hasStructuredTables'];
        }

        if (isset($map['hasUnstructuredDocs'])) {
            $model->hasUnstructuredDocs = $map['hasUnstructuredDocs'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['notes'])) {
            $model->notes = $map['notes'];
        }

        if (isset($map['objectBindings'])) {
            if (!empty($map['objectBindings'])) {
                $model->objectBindings = [];
                $n1 = 0;
                foreach ($map['objectBindings'] as $item1) {
                    $model->objectBindings[$n1] = objectBindings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['objectId'])) {
            $model->objectId = $map['objectId'];
        }

        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['settings'])) {
            if (!empty($map['settings'])) {
                $model->settings = [];
                foreach ($map['settings'] as $key1 => $value1) {
                    $model->settings[$key1] = $value1;
                }
            }
        }

        if (isset($map['skillOutputId'])) {
            $model->skillOutputId = $map['skillOutputId'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['sourceKind'])) {
            $model->sourceKind = $map['sourceKind'];
        }

        if (isset($map['sourceTags'])) {
            $model->sourceTags = $map['sourceTags'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['structuredTables'])) {
            if (!empty($map['structuredTables'])) {
                $model->structuredTables = [];
                $n1 = 0;
                foreach ($map['structuredTables'] as $item1) {
                    $model->structuredTables[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['unstructuredDocs'])) {
            if (!empty($map['unstructuredDocs'])) {
                $model->unstructuredDocs = [];
                $n1 = 0;
                foreach ($map['unstructuredDocs'] as $item1) {
                    $model->unstructuredDocs[$n1] = unstructuredDocs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
