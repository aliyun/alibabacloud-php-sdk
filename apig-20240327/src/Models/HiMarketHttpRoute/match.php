<?php

// This file is auto-generated, don't edit it. Thanks.
 
namespace AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketHttpRoute;
use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketHttpRoute\match\headers;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketHttpRoute\match\modelMatches;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketHttpRoute\match\path;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketHttpRoute\match\queryParams;
class match extends Model {
  /**
   * @var headers[]
   */
  public $headers;
  /**
   * @var string[]
   */
  public $methods;
  /**
   * @var modelMatches[]
   */
  public $modelMatches;
  /**
   * @var path
   */
  public $path;
  /**
   * @var queryParams[]
   */
  public $queryParams;
  protected $_name = [
      'headers' => 'headers',
      'methods' => 'methods',
      'modelMatches' => 'modelMatches',
      'path' => 'path',
      'queryParams' => 'queryParams',
  ];

  public function validate()
  {
    if(is_array($this->headers)) {
      Model::validateArray($this->headers);
    }
    if(is_array($this->methods)) {
      Model::validateArray($this->methods);
    }
    if(is_array($this->modelMatches)) {
      Model::validateArray($this->modelMatches);
    }
    if(null !== $this->path) {
      $this->path->validate();
    }
    if(is_array($this->queryParams)) {
      Model::validateArray($this->queryParams);
    }
    parent::validate();
  }

  public function toArray($noStream = false)
  {
    $res = [];
    if (null !== $this->headers) {
      if(is_array($this->headers)) {
        $res['headers'] = [];
        $n1 = 0;
        foreach($this->headers as $item1) {
          $res['headers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
          $n1++;
        }
      }
    }

    if (null !== $this->methods) {
      if(is_array($this->methods)) {
        $res['methods'] = [];
        $n1 = 0;
        foreach($this->methods as $item1) {
          $res['methods'][$n1] = $item1;
          $n1++;
        }
      }
    }

    if (null !== $this->modelMatches) {
      if(is_array($this->modelMatches)) {
        $res['modelMatches'] = [];
        $n1 = 0;
        foreach($this->modelMatches as $item1) {
          $res['modelMatches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
          $n1++;
        }
      }
    }

    if (null !== $this->path) {
      $res['path'] = null !== $this->path ? $this->path->toArray($noStream) : $this->path;
    }

    if (null !== $this->queryParams) {
      if(is_array($this->queryParams)) {
        $res['queryParams'] = [];
        $n1 = 0;
        foreach($this->queryParams as $item1) {
          $res['queryParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
          $n1++;
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
    if (isset($map['headers'])) {
      if(!empty($map['headers'])) {
        $model->headers = [];
        $n1 = 0;
        foreach($map['headers'] as $item1) {
          $model->headers[$n1] = headers::fromMap($item1);
          $n1++;
        }
      }
    }

    if (isset($map['methods'])) {
      if(!empty($map['methods'])) {
        $model->methods = [];
        $n1 = 0;
        foreach($map['methods'] as $item1) {
          $model->methods[$n1] = $item1;
          $n1++;
        }
      }
    }

    if (isset($map['modelMatches'])) {
      if(!empty($map['modelMatches'])) {
        $model->modelMatches = [];
        $n1 = 0;
        foreach($map['modelMatches'] as $item1) {
          $model->modelMatches[$n1] = modelMatches::fromMap($item1);
          $n1++;
        }
      }
    }

    if (isset($map['path'])) {
      $model->path = path::fromMap($map['path']);
    }

    if (isset($map['queryParams'])) {
      if(!empty($map['queryParams'])) {
        $model->queryParams = [];
        $n1 = 0;
        foreach($map['queryParams'] as $item1) {
          $model->queryParams[$n1] = queryParams::fromMap($item1);
          $n1++;
        }
      }
    }

    return $model;
  }


}

