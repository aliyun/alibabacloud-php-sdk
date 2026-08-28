<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class ListNodePoolComponentInstanceNodesRequest extends Model
{
    /**
     * @var string
     */
    public $configRevision;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $nodeNames;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'configRevision' => 'config_revision',
        'maxResults' => 'max_results',
        'nextToken' => 'next_token',
        'nodeNames' => 'node_names',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->nodeNames)) {
            Model::validateArray($this->nodeNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRevision) {
            $res['config_revision'] = $this->configRevision;
        }

        if (null !== $this->maxResults) {
            $res['max_results'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['next_token'] = $this->nextToken;
        }

        if (null !== $this->nodeNames) {
            if (\is_array($this->nodeNames)) {
                $res['node_names'] = [];
                $n1 = 0;
                foreach ($this->nodeNames as $item1) {
                    $res['node_names'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['config_revision'])) {
            $model->configRevision = $map['config_revision'];
        }

        if (isset($map['max_results'])) {
            $model->maxResults = $map['max_results'];
        }

        if (isset($map['next_token'])) {
            $model->nextToken = $map['next_token'];
        }

        if (isset($map['node_names'])) {
            if (!empty($map['node_names'])) {
                $model->nodeNames = [];
                $n1 = 0;
                foreach ($map['node_names'] as $item1) {
                    $model->nodeNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
