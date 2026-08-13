<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListOutputFilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListOutputFilesResponseBody\items\outputItems;

class items extends Model
{
    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $outputId;

    /**
     * @var outputItems[]
     */
    public $outputItems;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var string
     */
    public $outputTypeDisplayName;

    /**
     * @var string
     */
    public $skillOutputId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'conversationId' => 'conversationId',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'name' => 'name',
        'operatingObjectName' => 'operatingObjectName',
        'outputId' => 'outputId',
        'outputItems' => 'outputItems',
        'outputType' => 'outputType',
        'outputTypeDisplayName' => 'outputTypeDisplayName',
        'skillOutputId' => 'skillOutputId',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (\is_array($this->outputItems)) {
            Model::validateArray($this->outputItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversationId) {
            $res['conversationId'] = $this->conversationId;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->outputId) {
            $res['outputId'] = $this->outputId;
        }

        if (null !== $this->outputItems) {
            if (\is_array($this->outputItems)) {
                $res['outputItems'] = [];
                $n1 = 0;
                foreach ($this->outputItems as $item1) {
                    $res['outputItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outputType) {
            $res['outputType'] = $this->outputType;
        }

        if (null !== $this->outputTypeDisplayName) {
            $res['outputTypeDisplayName'] = $this->outputTypeDisplayName;
        }

        if (null !== $this->skillOutputId) {
            $res['skillOutputId'] = $this->skillOutputId;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['conversationId'])) {
            $model->conversationId = $map['conversationId'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['outputId'])) {
            $model->outputId = $map['outputId'];
        }

        if (isset($map['outputItems'])) {
            if (!empty($map['outputItems'])) {
                $model->outputItems = [];
                $n1 = 0;
                foreach ($map['outputItems'] as $item1) {
                    $model->outputItems[$n1] = outputItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['outputType'])) {
            $model->outputType = $map['outputType'];
        }

        if (isset($map['outputTypeDisplayName'])) {
            $model->outputTypeDisplayName = $map['outputTypeDisplayName'];
        }

        if (isset($map['skillOutputId'])) {
            $model->skillOutputId = $map['skillOutputId'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
