<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeCdsFileShareLinksRequest extends Model
{
    /**
     * @var string
     */
    public $cdsId;
    /**
     * @var string[]
     */
    public $creators;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $shareId;
    /**
     * @var string
     */
    public $shareName;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cdsId'      => 'CdsId',
        'creators'   => 'Creators',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'shareId'    => 'ShareId',
        'shareName'  => 'ShareName',
        'status'     => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->creators)) {
            Model::validateArray($this->creators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->creators) {
            if (\is_array($this->creators)) {
                $res['Creators'] = [];
                $n1              = 0;
                foreach ($this->creators as $item1) {
                    $res['Creators'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->shareId) {
            $res['ShareId'] = $this->shareId;
        }

        if (null !== $this->shareName) {
            $res['ShareName'] = $this->shareName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        if (isset($map['Creators'])) {
            if (!empty($map['Creators'])) {
                $model->creators = [];
                $n1              = 0;
                foreach ($map['Creators'] as $item1) {
                    $model->creators[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ShareId'])) {
            $model->shareId = $map['ShareId'];
        }

        if (isset($map['ShareName'])) {
            $model->shareName = $map['ShareName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
