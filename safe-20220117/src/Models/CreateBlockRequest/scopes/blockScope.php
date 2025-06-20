<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope\app;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope\bgSystem;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope\cluster;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope\customer;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope\product;

class blockScope extends Model
{
    /**
     * @var app
     */
    public $app;

    /**
     * @var bgSystem[]
     */
    public $bgSystem;

    /**
     * @var cluster
     */
    public $cluster;

    /**
     * @var customer[]
     */
    public $customer;

    /**
     * @var string[]
     */
    public $dept;

    /**
     * @var string
     */
    public $express;

    /**
     * @var string[]
     */
    public $infrastructure;

    /**
     * @var product[]
     */
    public $product;
    protected $_name = [
        'app' => 'App',
        'bgSystem' => 'BgSystem',
        'cluster' => 'Cluster',
        'customer' => 'Customer',
        'dept' => 'Dept',
        'express' => 'Express',
        'infrastructure' => 'Infrastructure',
        'product' => 'Product',
    ];

    public function validate()
    {
        if (null !== $this->app) {
            $this->app->validate();
        }
        if (\is_array($this->bgSystem)) {
            Model::validateArray($this->bgSystem);
        }
        if (null !== $this->cluster) {
            $this->cluster->validate();
        }
        if (\is_array($this->customer)) {
            Model::validateArray($this->customer);
        }
        if (\is_array($this->dept)) {
            Model::validateArray($this->dept);
        }
        if (\is_array($this->infrastructure)) {
            Model::validateArray($this->infrastructure);
        }
        if (\is_array($this->product)) {
            Model::validateArray($this->product);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = null !== $this->app ? $this->app->toArray($noStream) : $this->app;
        }

        if (null !== $this->bgSystem) {
            if (\is_array($this->bgSystem)) {
                $res['BgSystem'] = [];
                $n1 = 0;
                foreach ($this->bgSystem as $item1) {
                    $res['BgSystem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cluster) {
            $res['Cluster'] = null !== $this->cluster ? $this->cluster->toArray($noStream) : $this->cluster;
        }

        if (null !== $this->customer) {
            if (\is_array($this->customer)) {
                $res['Customer'] = [];
                $n1 = 0;
                foreach ($this->customer as $item1) {
                    $res['Customer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dept) {
            if (\is_array($this->dept)) {
                $res['Dept'] = [];
                $n1 = 0;
                foreach ($this->dept as $item1) {
                    $res['Dept'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->express) {
            $res['Express'] = $this->express;
        }

        if (null !== $this->infrastructure) {
            if (\is_array($this->infrastructure)) {
                $res['Infrastructure'] = [];
                $n1 = 0;
                foreach ($this->infrastructure as $item1) {
                    $res['Infrastructure'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->product) {
            if (\is_array($this->product)) {
                $res['Product'] = [];
                $n1 = 0;
                foreach ($this->product as $item1) {
                    $res['Product'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['App'])) {
            $model->app = app::fromMap($map['App']);
        }

        if (isset($map['BgSystem'])) {
            if (!empty($map['BgSystem'])) {
                $model->bgSystem = [];
                $n1 = 0;
                foreach ($map['BgSystem'] as $item1) {
                    $model->bgSystem[$n1] = bgSystem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Cluster'])) {
            $model->cluster = cluster::fromMap($map['Cluster']);
        }

        if (isset($map['Customer'])) {
            if (!empty($map['Customer'])) {
                $model->customer = [];
                $n1 = 0;
                foreach ($map['Customer'] as $item1) {
                    $model->customer[$n1] = customer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Dept'])) {
            if (!empty($map['Dept'])) {
                $model->dept = [];
                $n1 = 0;
                foreach ($map['Dept'] as $item1) {
                    $model->dept[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Express'])) {
            $model->express = $map['Express'];
        }

        if (isset($map['Infrastructure'])) {
            if (!empty($map['Infrastructure'])) {
                $model->infrastructure = [];
                $n1 = 0;
                foreach ($map['Infrastructure'] as $item1) {
                    $model->infrastructure[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Product'])) {
            if (!empty($map['Product'])) {
                $model->product = [];
                $n1 = 0;
                foreach ($map['Product'] as $item1) {
                    $model->product[$n1] = product::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
