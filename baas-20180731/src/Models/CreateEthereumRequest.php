<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\SDK\Baas\V20180731\Models\CreateEthereumRequest\node;
use AlibabaCloud\Tea\Model;

class CreateEthereumRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $consensus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $difficulty;

    /**
     * @var string
     */
    public $gas;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @description This parameter is required.
     *
     * @var node[]
     */
    public $node;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'consensus'   => 'Consensus',
        'description' => 'Description',
        'difficulty'  => 'Difficulty',
        'gas'         => 'Gas',
        'name'        => 'Name',
        'networkId'   => 'NetworkId',
        'node'        => 'Node',
        'region'      => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consensus) {
            $res['Consensus'] = $this->consensus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->difficulty) {
            $res['Difficulty'] = $this->difficulty;
        }
        if (null !== $this->gas) {
            $res['Gas'] = $this->gas;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->node) {
            $res['Node'] = [];
            if (null !== $this->node && \is_array($this->node)) {
                $n = 0;
                foreach ($this->node as $item) {
                    $res['Node'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEthereumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Consensus'])) {
            $model->consensus = $map['Consensus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Difficulty'])) {
            $model->difficulty = $map['Difficulty'];
        }
        if (isset($map['Gas'])) {
            $model->gas = $map['Gas'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['Node'])) {
            if (!empty($map['Node'])) {
                $model->node = [];
                $n           = 0;
                foreach ($map['Node'] as $item) {
                    $model->node[$n++] = null !== $item ? node::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
