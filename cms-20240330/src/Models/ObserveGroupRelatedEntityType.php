<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ObserveGroupRelatedEntityType extends Model
{
    /**
     * @var string
     */
    public $cnName;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $enName;

    /**
     * @var string
     */
    public $entityGroup;

    /**
     * @var string
     */
    public $relation;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'cnName' => 'cnName',
        'direction' => 'direction',
        'domain' => 'domain',
        'enName' => 'enName',
        'entityGroup' => 'entityGroup',
        'relation' => 'relation',
        'type' => 'type',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnName) {
            $res['cnName'] = $this->cnName;
        }

        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->enName) {
            $res['enName'] = $this->enName;
        }

        if (null !== $this->entityGroup) {
            $res['entityGroup'] = $this->entityGroup;
        }

        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['cnName'])) {
            $model->cnName = $map['cnName'];
        }

        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['enName'])) {
            $model->enName = $map['enName'];
        }

        if (isset($map['entityGroup'])) {
            $model->entityGroup = $map['entityGroup'];
        }

        if (isset($map['relation'])) {
            $model->relation = $map['relation'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
