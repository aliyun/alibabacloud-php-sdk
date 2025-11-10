<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServersResponseBody\apiMcpServers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServersResponseBody\apiMcpServers\additionalApiDescriptions\constParameters;

class additionalApiDescriptions extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $apiOverrideJson;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var constParameters[]
     */
    public $constParameters;

    /**
     * @var bool
     */
    public $enableOutputSchema;

    /**
     * @var bool
     */
    public $executeCliCommand;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'apiName' => 'apiName',
        'apiOverrideJson' => 'apiOverrideJson',
        'apiVersion' => 'apiVersion',
        'constParameters' => 'constParameters',
        'enableOutputSchema' => 'enableOutputSchema',
        'executeCliCommand' => 'executeCliCommand',
        'product' => 'product',
    ];

    public function validate()
    {
        if (\is_array($this->constParameters)) {
            Model::validateArray($this->constParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['apiName'] = $this->apiName;
        }

        if (null !== $this->apiOverrideJson) {
            $res['apiOverrideJson'] = $this->apiOverrideJson;
        }

        if (null !== $this->apiVersion) {
            $res['apiVersion'] = $this->apiVersion;
        }

        if (null !== $this->constParameters) {
            if (\is_array($this->constParameters)) {
                $res['constParameters'] = [];
                $n1 = 0;
                foreach ($this->constParameters as $item1) {
                    $res['constParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableOutputSchema) {
            $res['enableOutputSchema'] = $this->enableOutputSchema;
        }

        if (null !== $this->executeCliCommand) {
            $res['executeCliCommand'] = $this->executeCliCommand;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
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
        if (isset($map['apiName'])) {
            $model->apiName = $map['apiName'];
        }

        if (isset($map['apiOverrideJson'])) {
            $model->apiOverrideJson = $map['apiOverrideJson'];
        }

        if (isset($map['apiVersion'])) {
            $model->apiVersion = $map['apiVersion'];
        }

        if (isset($map['constParameters'])) {
            if (!empty($map['constParameters'])) {
                $model->constParameters = [];
                $n1 = 0;
                foreach ($map['constParameters'] as $item1) {
                    $model->constParameters[$n1] = constParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['enableOutputSchema'])) {
            $model->enableOutputSchema = $map['enableOutputSchema'];
        }

        if (isset($map['executeCliCommand'])) {
            $model->executeCliCommand = $map['executeCliCommand'];
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        return $model;
    }
}
