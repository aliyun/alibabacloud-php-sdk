<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppAssistantAgentsResponseBody\module;

use AlibabaCloud\Dara\Model;

class embedConfig extends Model
{
    /**
     * @var string[]
     */
    public $extra;

    /**
     * @var string
     */
    public $rawScript;
    protected $_name = [
        'extra' => 'Extra',
        'rawScript' => 'RawScript',
    ];

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['Extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['Extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->rawScript) {
            $res['RawScript'] = $this->rawScript;
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
        if (isset($map['Extra'])) {
            if (!empty($map['Extra'])) {
                $model->extra = [];
                foreach ($map['Extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        if (isset($map['RawScript'])) {
            $model->rawScript = $map['RawScript'];
        }

        return $model;
    }
}
