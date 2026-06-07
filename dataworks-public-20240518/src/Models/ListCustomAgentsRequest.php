<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListCustomAgentsRequest extends Model
{
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
    public $q;

    /**
     * @var string[]
     */
    public $visibility;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'q' => 'Q',
        'visibility' => 'Visibility',
    ];

    public function validate()
    {
        if (\is_array($this->visibility)) {
            Model::validateArray($this->visibility);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->q) {
            $res['Q'] = $this->q;
        }

        if (null !== $this->visibility) {
            if (\is_array($this->visibility)) {
                $res['Visibility'] = [];
                $n1 = 0;
                foreach ($this->visibility as $item1) {
                    $res['Visibility'][$n1] = $item1;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Q'])) {
            $model->q = $map['Q'];
        }

        if (isset($map['Visibility'])) {
            if (!empty($map['Visibility'])) {
                $model->visibility = [];
                $n1 = 0;
                foreach ($map['Visibility'] as $item1) {
                    $model->visibility[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
