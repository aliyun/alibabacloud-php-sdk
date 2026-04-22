<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSourceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $modules;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceName;
    protected $_name = [
        'modules' => 'Modules',
        'source' => 'Source',
        'sourceName' => 'SourceName',
    ];

    public function validate()
    {
        if (\is_array($this->modules)) {
            Model::validateArray($this->modules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modules) {
            if (\is_array($this->modules)) {
                $res['Modules'] = [];
                $n1 = 0;
                foreach ($this->modules as $item1) {
                    $res['Modules'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
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
        if (isset($map['Modules'])) {
            if (!empty($map['Modules'])) {
                $model->modules = [];
                $n1 = 0;
                foreach ($map['Modules'] as $item1) {
                    $model->modules[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }

        return $model;
    }
}
