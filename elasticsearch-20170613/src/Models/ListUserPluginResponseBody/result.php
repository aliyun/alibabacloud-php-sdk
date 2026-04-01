<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListUserPluginResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListUserPluginResponseBody\result\bingoPlugins;

class result extends Model
{
    /**
     * @var bingoPlugins[]
     */
    public $bingoPlugins;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'bingoPlugins' => 'bingoPlugins',
        'name' => 'name',
        'source' => 'source',
        'state' => 'state',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->bingoPlugins)) {
            Model::validateArray($this->bingoPlugins);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bingoPlugins) {
            if (\is_array($this->bingoPlugins)) {
                $res['bingoPlugins'] = [];
                $n1 = 0;
                foreach ($this->bingoPlugins as $item1) {
                    $res['bingoPlugins'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['bingoPlugins'])) {
            if (!empty($map['bingoPlugins'])) {
                $model->bingoPlugins = [];
                $n1 = 0;
                foreach ($map['bingoPlugins'] as $item1) {
                    $model->bingoPlugins[$n1] = bingoPlugins::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
