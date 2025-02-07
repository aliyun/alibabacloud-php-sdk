<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsResponseBody\originPools\origins;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsResponseBody\originPools\references;

class originPools extends Model
{
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var origins[]
     */
    public $origins;
    /**
     * @var string
     */
    public $recordName;
    /**
     * @var int
     */
    public $referenceLBCount;
    /**
     * @var references
     */
    public $references;
    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'enabled'          => 'Enabled',
        'id'               => 'Id',
        'name'             => 'Name',
        'origins'          => 'Origins',
        'recordName'       => 'RecordName',
        'referenceLBCount' => 'ReferenceLBCount',
        'references'       => 'References',
        'siteId'           => 'SiteId',
    ];

    public function validate()
    {
        if (\is_array($this->origins)) {
            Model::validateArray($this->origins);
        }
        if (null !== $this->references) {
            $this->references->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->origins) {
            if (\is_array($this->origins)) {
                $res['Origins'] = [];
                $n1             = 0;
                foreach ($this->origins as $item1) {
                    $res['Origins'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->referenceLBCount) {
            $res['ReferenceLBCount'] = $this->referenceLBCount;
        }

        if (null !== $this->references) {
            $res['References'] = null !== $this->references ? $this->references->toArray($noStream) : $this->references;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Origins'])) {
            if (!empty($map['Origins'])) {
                $model->origins = [];
                $n1             = 0;
                foreach ($map['Origins'] as $item1) {
                    $model->origins[$n1++] = origins::fromMap($item1);
                }
            }
        }

        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['ReferenceLBCount'])) {
            $model->referenceLBCount = $map['ReferenceLBCount'];
        }

        if (isset($map['References'])) {
            $model->references = references::fromMap($map['References']);
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
