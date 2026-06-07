<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateMcpServerRequest\visibilityScope;

class UpdateMcpServerRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $customHeaders;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $transport;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var visibilityScope
     */
    public $visibilityScope;
    protected $_name = [
        'customHeaders' => 'CustomHeaders',
        'name' => 'Name',
        'transport' => 'Transport',
        'url' => 'Url',
        'visibility' => 'Visibility',
        'visibilityScope' => 'VisibilityScope',
    ];

    public function validate()
    {
        if (\is_array($this->customHeaders)) {
            Model::validateArray($this->customHeaders);
        }
        if (null !== $this->visibilityScope) {
            $this->visibilityScope->validate();
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->transport) {
            $res['Transport'] = $this->transport;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        if (null !== $this->visibilityScope) {
            $res['VisibilityScope'] = null !== $this->visibilityScope ? $this->visibilityScope->toArray($noStream) : $this->visibilityScope;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Transport'])) {
            $model->transport = $map['Transport'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        if (isset($map['VisibilityScope'])) {
            $model->visibilityScope = visibilityScope::fromMap($map['VisibilityScope']);
        }

        return $model;
    }
}
