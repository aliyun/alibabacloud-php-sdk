<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListMcpServersResponseBody\pagingInfo\mcpServers;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var mixed[]
     */
    public $customHeaders;

    /**
     * @var string
     */
    public $transport;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'customHeaders' => 'CustomHeaders',
        'transport' => 'Transport',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->customHeaders)) {
            Model::validateArray($this->customHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customHeaders) {
            if (\is_array($this->customHeaders)) {
                $res['CustomHeaders'] = [];
                foreach ($this->customHeaders as $key1 => $value1) {
                    $res['CustomHeaders'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->transport) {
            $res['Transport'] = $this->transport;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['CustomHeaders'])) {
            if (!empty($map['CustomHeaders'])) {
                $model->customHeaders = [];
                foreach ($map['CustomHeaders'] as $key1 => $value1) {
                    $model->customHeaders[$key1] = $value1;
                }
            }
        }

        if (isset($map['Transport'])) {
            $model->transport = $map['Transport'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
