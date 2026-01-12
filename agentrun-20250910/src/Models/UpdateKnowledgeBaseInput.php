<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class UpdateKnowledgeBaseInput extends Model
{
    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $providerSettings;

    /**
     * @var mixed[]
     */
    public $retrieveSettings;
    protected $_name = [
        'credentialName' => 'credentialName',
        'description' => 'description',
        'providerSettings' => 'providerSettings',
        'retrieveSettings' => 'retrieveSettings',
    ];

    public function validate()
    {
        if (\is_array($this->providerSettings)) {
            Model::validateArray($this->providerSettings);
        }
        if (\is_array($this->retrieveSettings)) {
            Model::validateArray($this->retrieveSettings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialName) {
            $res['credentialName'] = $this->credentialName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->providerSettings) {
            if (\is_array($this->providerSettings)) {
                $res['providerSettings'] = [];
                foreach ($this->providerSettings as $key1 => $value1) {
                    $res['providerSettings'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->retrieveSettings) {
            if (\is_array($this->retrieveSettings)) {
                $res['retrieveSettings'] = [];
                foreach ($this->retrieveSettings as $key1 => $value1) {
                    $res['retrieveSettings'][$key1] = $value1;
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
        if (isset($map['credentialName'])) {
            $model->credentialName = $map['credentialName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['providerSettings'])) {
            if (!empty($map['providerSettings'])) {
                $model->providerSettings = [];
                foreach ($map['providerSettings'] as $key1 => $value1) {
                    $model->providerSettings[$key1] = $value1;
                }
            }
        }

        if (isset($map['retrieveSettings'])) {
            if (!empty($map['retrieveSettings'])) {
                $model->retrieveSettings = [];
                foreach ($map['retrieveSettings'] as $key1 => $value1) {
                    $model->retrieveSettings[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
