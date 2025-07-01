<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem;

use AlibabaCloud\Dara\Model;

class supportedFeatures extends Model
{
    /**
     * @var string[]
     */
    public $supportedFeature;
    protected $_name = [
        'supportedFeature' => 'SupportedFeature',
    ];

    public function validate()
    {
        if (\is_array($this->supportedFeature)) {
            Model::validateArray($this->supportedFeature);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedFeature) {
            if (\is_array($this->supportedFeature)) {
                $res['SupportedFeature'] = [];
                $n1 = 0;
                foreach ($this->supportedFeature as $item1) {
                    $res['SupportedFeature'][$n1] = $item1;
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
        if (isset($map['SupportedFeature'])) {
            if (!empty($map['SupportedFeature'])) {
                $model->supportedFeature = [];
                $n1 = 0;
                foreach ($map['SupportedFeature'] as $item1) {
                    $model->supportedFeature[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
